<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;
    protected $fillable =['key','image','title','Subtitle','content','Boutton','couleurBoutton','active'];

    public static function getTitle(string $key): string
    {
        $widget = TextWidget::query()->where('key', $key)->first();

        if (!$widget) {
            return '';
        }

        return $widget->title;
    }

    public static function getContent(string $key): string
    {
        $widget = Cache::get('text-widget-' . $key, function () use ($key) {
            return TextWidget::query()->where('key', $key)->first();
        });

        if (!$widget) {
            return '';
        }

        return $widget->content;
    }

    public static function getImage(string $key): ?string
    {
        $widget = self::where('key', $key)->first();
           
                if($widget && str_starts_with($widget->Image, 'http')){
                  return $widget->Image;
                }
                return '/storage/'.$widget->Image;
              }
}