<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Http\Requests\NovaRequest;

class Blog extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Blog>
     */
    public static $model = \App\Models\Blog::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Catégories','blog','App\Nova\CategoryBlog'),
            Text::make('Titre (Fr)','title'),
            Text::make('Titre (En)','title_en'),
            Text::make('Auteur','description'),
            Textarea::make('Accroche (Fr)','accroche'),
            Textarea::make('Accroche (En)','accroche_en'),
            Image::make('Une image','photo')->disk('public')
            ->storeAs(function (Request $request) {
                    return $request->photo->getClientOriginalName();
                 }),
            NovaTinyMCE::make('Contenu (Fr)','content')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            NovaTinyMCE::make('Contenu (En)','content_en')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            DateTime::make('Date','created_at'),

                 
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
    public static function label()
    {
     return 'Mon blog';
    }
}