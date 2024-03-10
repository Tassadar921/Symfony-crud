<?php

namespace App\Enum;

enum ProjectCategoryEnum: string
{
    case PERSONAL = 'Projet personnel';
    case SHOPPING = 'E-commerce';
    case MOBILE = 'Application mobile';
    case MONITORING = 'Veille technique';
}
