<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Team extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Team>
     */
    public static $model = \App\Models\Team::class;

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
            Text::make('Nom','name'),
            Text::make('Prénom','surname'),
            Text::make('Statut (Fr)','statut'),
            Text::make('Statut (En)','statut_en'),
            Text::make('Établissement','etablissement')->default('Complexe Horticole d\'Agadir'),
            Country::make('Pays','country')->default('MA'),
            Text::make('Spécialité (Fr)','poste'),
            Text::make('Spécialité (En)','poste_en'),
            Text::make('Département (Fr)','departement'),
            Text::make('Département (En)','departement_en'),
            Text::make('E-mail','email'),
            Text::make('Téléphone','phone'),
            Text::make('Gsm','gsm'),
            Textarea::make('Compétences (Fr)','competence'),
            Textarea::make('Compétences (En)','competence_en'),
            Image::make('photo','photo')->disk('public')->storeAs(function(Request $request){
                return $request->photo->getClientOriginalName();
            }),
        ];
    }
    public static function label()
    {
        return 'Équipe';
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