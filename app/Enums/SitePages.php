<?php

namespace App\Enums;

enum SitePages: string
{
    case Home = '';
    case About = 'about';
    case Services = 'services';
    case Moderators = 'moderators';
    case WhyUs = 'whyus';
    case Reviews = 'reviews';
    case Media = 'media';
    case Contact = 'contact';
    case Hajj = 'hajj';
    case Umrah = 'umrah';

    public function label(): string
    {
        return match ($this) {
            self::Home => 'الرئيسية',
            self::About => 'من نحن',
            self::Services => 'خدماتنا',
            self::Moderators => 'المشرفون',
            self::WhyUs => 'لماذا نحن',
            self::Reviews => 'آراء العملاء',
            self::Media => 'المركز الإعلامي',
            self::Contact => 'تواصل معنا',
            self::Hajj => 'الحج',
            self::Umrah => 'العمرة',
        };
    }
}