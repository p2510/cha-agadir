<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Outl1ne\NovaColorField\Color;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Http\Requests\NovaRequest;

class Slide extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Slide>
     */
    public static $model = \App\Models\Slide::class;

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
            Text::make('Lien','url'),
            Text::make('Sujet (Fr)','subject'),
            Text::make('Sujet (En)','subject_en'),
            Text::make('Titre (Fr)','title'),
            Text::make('Titre (En)','title_en'),
            Textarea::make('Decription (Fr)','description'),
            Textarea::make('Decription (En)','description_en'),
            Color::make('Couleur','color'),
            Image::make('Une image PC','photo')->disk('public')
            ->storeAs(function (Request $request) {
                    return $request->photo->getClientOriginalName();
                 }),
            Image::make('Une image  Mobile' ,'photo_en')->disk('public')
             ->storeAs(function (Request $request) {
                         return $request->photo_en->getClientOriginalName() ;
                  }),
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
}