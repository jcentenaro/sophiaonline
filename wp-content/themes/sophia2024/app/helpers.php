<?php

namespace App;

class helpers
{
    public static function linkSection(string $n): string
    {
        switch ($n) {
            case 'imagen':
                // return get_post_type_archive_link('');
                break;
            case 'alianzas':
                return get_post_type_archive_link('alianzas');
                break;
            case 'columnistas':
                return get_post_type_archive_link('columnistas');
                break;
            case 'entrevistas':
                return get_post_type_archive_link('entrevistas');
                break;
            case 'videos':
                return get_post_type_archive_link('videos');
                break;
            case 'cartas':
                return get_post_type_archive_link('cartas');
                break;
        }

        return '#'.$n;
    }
}
