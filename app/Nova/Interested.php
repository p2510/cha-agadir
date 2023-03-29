<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;


class Interested extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Interested>
     */
    public static $model = \App\Models\Interested::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    
    


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
        
            Text::make('Genre','gender'),
            Text::make('Nom','name'),
            Text::make('Prénom','surname'),
            Email::make('E-mail','email'),
            Text::make('Pays','country'),
            Text::make('Province','province'),
            Text::make('Niveau d\'études ','level'),
            Text::make('Téléphone','phone'),
            Text::make('Diplômes et spécialités','grade'),
            Text::make('Mentions légales','accepted'),
            BelongsTo::make('Formations','course','App\Nova\Course'),
            Text::make('Cycle','degree_name'),
            DateTime::make('Crée le','created_at'),

            
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
        return [
            new DownloadExcel,
        ];
    }
    public static function label()
    {
        return 'Intéressé';
    }
}