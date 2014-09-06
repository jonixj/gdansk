<?php

Class Party
{
    public function execute(PartyPerson $p)
    {
        $p->drink();
        $p->dance();
    }
}


interface Person
{
    public function drink();
    public function eat();
    public function dance();
}


class PartyPerson implements Person{

    public function drink()
    {
        echo "I am drinking!\n";
    }

    public function eat()
    {
        echo "I am eating!\n";
    }

    public function dance()
    {
        echo "I am dancing!\n";
    }
}

$person = new PartyPerson();

$partyTime = new Party();

$partyTime->execute($person);