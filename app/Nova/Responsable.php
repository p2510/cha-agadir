<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Responsable extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Responsable>
     */
    public static $model = \App\Models\Responsable::class;

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
            //ID::make()->sortable(),
            Text::make('Nom','name'),
            Text::make('Prénom','surname'),
            Text::make('Statut','statut'),
            Text::make('Établissement','etablissement'),
            Country::make('Pays','country'),
            Text::make('Spécialité','poste'),
            Text::make('Département','departement'),
            Text::make('E-mail','email'),
            Text::make('Téléphone','phone'),
            Text::make('Gsm','gsm'),
            Textarea::make('Compétences','competence'),
            Image::make('photo','photo')->disk('public')->storeAs(function(Request $request){
                return $request->photo->getClientOriginalName();
            }),
            HasMany::make('Course'),          
        ];
    }
    public static function label()
    {
        return 'Responsables';
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