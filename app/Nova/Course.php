<?php

namespace App\Nova;


use Carbon\CarbonInterval;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Jangvel\NovaGutenberg\NovaGutenberg;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Http\Requests\NovaRequest;
use NumaxLab\NovaCKEditor5Classic\CKEditor5Classic;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Course>
     */
    public static $model = \App\Models\Course::class;

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
            BelongsTo::make('Cycle','degree','App\Nova\Degree'),
            BelongsTo::make('Responsable','responsable','App\Nova\Responsable')->nullable(),
            Number::make("Rang",'position'),
            Text::make('Intitulé de la formation','name'),
            Image::make('Photo'),
            //CKEditor5Classic::make('description'),
            NovaTinyMCE::make('description')
            ->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
           
            Textarea::make('Accroche','accroche'),
            
            //Trix::make('Description','description'),
            //Textarea::make('Description','description'),

            Number::make('Durée en mois','duration'),
            BelongsTo::make('Lieu','location','App\Nova\Location'),
            BelongsTo::make('Mode','mode', 'App\Nova\Mode'),
            BelongsTo::make('Type de formation','trainingType', 'App\Nova\TrainingType'),
            BelongsTo::make('Rythme', 'modality','App\Nova\Modality'),
            BelongsTo::make('Langue','language','App\Nova\Language'),
            NovaTinyMCE::make('Prérequis et admission','admission')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            NovaTinyMCE::make('Dossier','dossier')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            NovaTinyMCE::make('Candidature','candidature')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            DateTime::make('Date limite','datelimite'),
            NovaTinyMCE::make('Modaliés de selection','selection')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            Date::make('Date rentrée','daterentre'),

            NovaTinyMCE::make('Diplôme','grade')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),

            NovaTinyMCE::make('Profile - Compétences','profile')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),
            NovaTinyMCE::make('Débouchés','opportunity')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]), 
            NovaGutenberg::make(__('Témoignage'), 'review'),

            /*NovaTinyMCE::make('','review')->options([
                'plugins' => [
                    'lists','preview','anchor','pagebreak','image','wordcount','fullscreen','directionality'
                ],
                'toolbar' => 'undo redo | styles | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link',
                'use_lfm' => true
            ]),*/


            HasMany::make('programs'),
            
            HasMany::make('downloads'),
            HasMany::make('interesteds'),
    

            //Date::make('Date limite','datelimite'),

        ];
    }
    public static function label() {
        return 'Formations';
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