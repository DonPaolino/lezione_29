<?php

class FormattatoreData
{
    public function ottieniDataCorrente()
    {
        return date("Y-m-d");
    }

    public function ottieniDataFormato1()
    {
        return date("Y/m/d");
    }

    public function ottieniDataFormato2()
    {
        return date("y.m.d");
    }

    public function ottieniDataFormato3()
    {
        return date("d-m-y");
    }
}

