<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Enum\ProjectCategoryEnum;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
            ImageField::new('picture')->setUploadDir('public/uploads')->setBasePath('uploads'),
            TextField::new('link'),
            ChoiceField::new('category')
                ->setChoices([
                    'Projet personnel' => ProjectCategoryEnum::PERSONAL->value,
                    'E-commerce' => ProjectCategoryEnum::SHOPPING->value,
                    'Application mobile' => ProjectCategoryEnum::MOBILE->value,
                    'Veille technique' => ProjectCategoryEnum::MONITORING->value,
                ]),
            ChoiceField::new('technos')
                ->setChoices([
                    'AdonisJS' => ProjectCategoryEnum::PERSONAL->value,
                    'Angular ' => ProjectCategoryEnum::SHOPPING->value,
                    'React' => ProjectCategoryEnum::MOBILE->value,
                    'Vue' => ProjectCategoryEnum::MONITORING->value,
                    'Nuxt' => ProjectCategoryEnum::MONITORING->value,
                    'Symfony' => ProjectCategoryEnum::MONITORING->value,
                    'Laravel' => ProjectCategoryEnum::MONITORING->value,
                    'Svelte' => ProjectCategoryEnum::MONITORING->value,

                ])->allowMultipleChoices(),
            DateField::new('startDate'),
            DateField::new('endDate'),
        ];
    }

}
