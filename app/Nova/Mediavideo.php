<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Mostafaznv\NovaVideo\Video;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Mediavideo extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Mediavideo>
     */
    public static $model = \App\Models\Mediavideo::class;

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
            BelongsTo::make('Catégories','vidéos','App\Nova\CategoryVideo'),
            Text::make('Titre','title'),
            Text::make('Url youtube','video'),
            /*Video::make('Une Vidéo','video')->disk('public')
            ->storeAs(function (Request $request) {
                return $request->video->getClientOriginalName();
             })->rules('file', 'max:600000', 'mimes:mp4,avi,mpeg,quicktime', 'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime')
                ->creationRules('required')
                ->updateRules('nullable'),
                */
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
        return 'Les vidéos';
    }
}