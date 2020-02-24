<?php

namespace App\Http;

use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Service\UserServiceInterface;

class UserHttpHandler extends UserHttpHandlerAbstract
{
    public function index(UserServiceInterface $userService)
    {
        if($userService->isLogged()){
            $this->render("users/profile", $userService->currentUser());
        }else{
            $this->render("home/index");
        }
    }

    public function allUsers(UserServiceInterface $userService)
    {
        $this->render("users/all", $userService->all());
    }

    public function profile(UserServiceInterface $userService,
                            array $formData = [])
    {
        $currentUser = $userService->currentUser();

        if (null == $currentUser) {
            $this->redirect("login.php");
        }

        if (isset($formData['edit'])) {
            $this->handlerEditProcess($userService, $formData);
        }else{
            $this->render("users/profile", $currentUser);
        }
    }


    public function login(UserServiceInterface $userService,
                          array $formData = [])
    {
        if (isset($formData['login'])) {
            $this->handlerLoginProcess($userService, $formData);
        } else {
            $this->render("users/login");
        }
    }

    public function registerUser(UserServiceInterface $userService,
                                 array $formData = [])
    {
        if (isset($formData['register'])) {
            $this->handlerRegisterProcess($userService, $formData);
        } else {
            $this->render("users/register");
        }
    }

    /**
     * @param UserServiceInterface $userService
     * @param array $formData
     */
    private function handlerRegisterProcess(UserServiceInterface $userService, array $formData): void
    {
        $user = $this->dataBinder->bind($formData, UserDTO::class);

        if($userService->register($user, $formData['confirm_password'])) {
            $this->redirect("login.php");
        }else{
            $this->render("app/error",
                new ErrorDTO("Username is already taken or password mismatch."));
        }
    }

    private function handlerLoginProcess(UserServiceInterface $userService, array $formData): void
    {
        $currentUser = $userService->login($formData['username'], $formData['password']);

        if (null !== $currentUser) {
            $_SESSION['id'] = $currentUser->getId();
            $this->redirect("profile.php");
        }else{
            $this->render("app/error", new ErrorDTO("Username does not exist or password mismatch."));
        }
    }

    private function handlerEditProcess(UserServiceInterface $userService, array $formData): void
    {
        $user = $this->dataBinder->bind($formData, UserDTO::class);

        if($userService->update($user)) {
            $this->redirect("profile.php");
        }else{
            $this->render("app/error",
                new ErrorDTO("Error editing the profile"));
        }
    }

}