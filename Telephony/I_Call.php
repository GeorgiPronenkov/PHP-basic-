<?php

interface I_Call
{

    public function call(string $phoneNumber): string;

    public function browse(string $url): string;

}