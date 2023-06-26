<?php

namespace App\Providers;

use App\Nova\Blog;
use App\Nova\Logo;
use App\Nova\Mode;
use App\Nova\Team;
use App\Nova\User;
use App\Nova\About;
use App\Nova\Barre;
use App\Nova\Media;
use App\Nova\Popup;
use App\Nova\Slide;
use App\Nova\Whyus;
use App\Nova\Campus;
use App\Nova\Center;
use App\Nova\Course;
use App\Nova\Degree;
use App\Nova\Design;
use App\Nova\Impact;
use App\Nova\Search;
use App\Nova\Contact;
use App\Nova\Mention;
use App\Nova\Partner;
use App\Nova\Program;
use App\Nova\Tabpage;
use App\Nova\Business;
use App\Nova\Director;
use App\Nova\Download;
use App\Nova\Language;
use App\Nova\Location;
use App\Nova\Modality;
use App\Nova\Tabimage;
use Laravel\Nova\Nova;
use App\Nova\Evenement;
use App\Nova\Pagevideo;
use App\Nova\Curriculum;
use App\Nova\Experience;
use App\Nova\Interested;
use App\Nova\Mediavideo;
use App\Nova\Newsletter;
use App\Nova\Coursevideo;
use App\Nova\Responsable;
use App\Nova\CategoryBlog;
use App\Nova\Downloadpage;
use App\Nova\TrainingType;
use App\Nova\CategoryMedia;
use App\Nova\CategoryVideo;
use App\Nova\Evenementpage;
use App\Nova\Evenementvideo;
use App\Nova\ModeApplication;
use App\Nova\MessageNewsletter;
use Laravel\Nova\Menu\MenuItem;
use App\Nova\EvenementInterested;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\MenuSection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Nova::$initialPath = 'resources/courses';
        
        Nova::footer( function($request)
        {
          return Blade::render('
          @env(\'prod\')
             Complexe Horticole d\'Agadir 
          @endenv
          @env(\'local\')
              Complexe Horticole d\'Agadir 
          @endenv
         ');
        });
        
        Nova::mainMenu(function () {
            return [
              
                MenuSection::make('Formations', [
                    MenuItem::resource(Course::class),
                    MenuItem::resource(Program::class),
                    MenuItem::resource(Download::class),
                    MenuItem::resource(Curriculum::class),
                    MenuItem::resource(TrainingType::class),
                    MenuItem::resource(Degree::class),
                    MenuItem::resource(Language::class),
                    MenuItem::resource(Location::class),
                    MenuItem::resource(Modality::class),
                    MenuItem::resource(Mode::class),
                    MenuItem::resource(Design::class), 
                    MenuItem::resource(Coursevideo::class),
                ])->icon('academic-cap')->collapsable(),
                    
                MenuSection::make('Contenu des pages', [
                    MenuItem::resource(Tabpage::class),
                    MenuItem::resource(Downloadpage::class),
                    MenuItem::resource(Tabimage::class),
                    MenuItem::resource(Pagevideo::class),
                    MenuItem::resource(Slide::class),
                    MenuItem::resource(Whyus::class),
                    MenuItem::resource(Barre::class),
                    MenuItem::resource(Popup::class),
                    MenuItem::resource(Partner::class),
                ])->icon('document-text')->collapsable(),
                
                MenuSection::make('Photos des pages', [
                    MenuItem::resource(About::class),
                    MenuItem::resource(Director::class),
                    MenuItem::resource(Campus::class),
                    MenuItem::resource(Search::class),
                    MenuItem::resource(Center::class),
                    MenuItem::resource(Experience::class),
                    MenuItem::resource(Impact::class),
                    MenuItem::resource(Business::class),
                ])->icon('photograph')->collapsable(),
                
                MenuSection::make('Évènements', [
                    MenuItem::resource(Evenement::class),
                    MenuItem::resource(Evenementpage::class),
                    MenuItem::resource(EvenementInterested::class),
                    MenuItem::resource(Evenementvideo::class),
                ])->icon('calendar')->collapsable(),

                MenuSection::make('Blog', [
                    MenuItem::resource(CategoryBlog::class),
                    MenuItem::resource(Blog::class),
                ])->icon('rss')->collapsable(),

                MenuSection::make('Staff', [
                    MenuItem::resource(Responsable::class),
                    MenuItem::resource(Team::class)
                ])->icon('user-group')->collapsable(),

                MenuSection::make('Media', [
                    MenuItem::resource(CategoryMedia::class),
                    MenuItem::resource(CategoryVideo::class),
                    MenuItem::resource(Media::class),
                    MenuItem::resource(Mediavideo::class),
                    MenuItem::resource(Logo::class),

                ])->icon('document-download')->collapsable(),

                MenuSection::make('Visiteurs', [
                    MenuItem::resource(Interested::class),
                    MenuItem::resource(Contact::class),
                ])->icon('users')->collapsable(),

                MenuSection::make('Newsletter', [
                    MenuItem::resource(Newsletter::class),
                    MenuItem::resource(MessageNewsletter::class),
                ])->icon('mail')->collapsable(),
                
                MenuItem::resource(Mention::class),
                MenuItem::link('Activer  maintenance', '/activer-maintenance'),
                MenuItem::link('Désactiver maintenance', '/desactiver-maintenance'),
                MenuItem::resource(User::class),
          
                
            ];
        });


    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'teste@gmail.com',
                'admin@gmail.com',
                'samir.belghol@gmail.com',
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
          
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}