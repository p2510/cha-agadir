<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaColorField\Color;
use Laravel\Nova\Http\Requests\NovaRequest;

class Design extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Design>
     */
    public static $model = \App\Models\Design::class;

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
            Color::make('Couleur','color'),
            Select::make('Taille','size')->options([
                '6px' => "6",
                '8px' => "8",
                '10px' => "10",
                '12px' => "12",
                '14px' => "14",
                '16px' => "16",
                '18px' => "18",
                '20px' => "20",
                '22px' => "22",
                '24px' => "24",
                '26px' => "26",
                '28px' => "28",
                '30px' => "30",
                '32px' => "32",

            ])
     
            
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
    
    public static function label(){
        return 'Design';
    }
    
    
}