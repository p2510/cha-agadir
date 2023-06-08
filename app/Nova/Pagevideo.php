<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Pagevideo extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Pagevideo>
     */
    public static $model = \App\Models\Pagevideo::class;

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
           
            Select::make('Choisir la page','pagename')->options([
                'centre-excellence' => 'centre-excellence',
                'recherche' => 'recherche',
                'ferme-experiementale' => 'ferme-experiementale',
                'impact-cluster' => 'impact-cluster',
                'agri-business' => 'agri-business',
                'about' => 'À propos',
                'mot-du-directeur'=>'Mot du directeur',
                'campus'=>'vie estudiantine',
              
            ]) ,  
            Text::make('Titre (Fr)','title'),
            Text::make('Titre (En)','title_en'),
            Text::make('Url youtube','video'),
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
        return 'Vidéos des pages';
    }
}