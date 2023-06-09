@extends('layouts.app')
@section('content')
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 0px;
            padding-bottom: 0px;


        }
    </style>
    <div style="background-color:white;border-top:solid 2px rgb(45, 69, 88) ; padding-bottom:14px;"></div>
    <div class="main-content">
        <div class="container">

            <section class="inner-header divider ">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content  ">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">{{ __('header.title1') }}</a></li>
                                    <li><a href="{{ route('index.professor') }}">{{ __('header.subtitle33') }}</a> </li>
                                    <li>{{ $responsable->name }} {{ $responsable->surname }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Section: Experts Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-4">
                           
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item ">
                                    <div class="team-members mb-40">
                                        <div class="team-thumb mr-0">
                                            <img src="{{ asset('storage') }}/{{ $responsable->photo }}" alt=""
                                                class="img-fullwidth">
                                        </div>
                                        <div class="team-bottom-part border-1px p-15">
                                           
                                                <h4 class="text-uppercase font-weight-600 m-0 pb-5 font-16">
                                                    {{ $responsable->name }}
                                                    {{ $responsable->surname }} </h4>
                                            
                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                @if (App::isLocale('en'))
                                                    {{ $responsable->statut_en }}
                                                @else
                                                    {{ $responsable->statut }}
                                                @endif
                                            </h6>
                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                @if (App::isLocale('en'))
                                                    {{ $responsable->poste_en }}
                                                @else
                                                    {{ $responsable->poste }}
                                                @endif
                                            </h6>
                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                {{ $responsable->etablissement }}
                                            </h6>
                                            <ul class="list-inline mt-15">

                                                @if (isset($responsable->country))
                                                    <li class="m-0 pr-10" style="width:100%;"> <i
                                                            class="pe-7s-global font-16  text-theme-colored2 mr-5"></i>
                                                        <a class="text-gray font-12" href="#">
                                                            @php
                                                                $countries = [
                                                                    'AF' => 'Afghanistan',
                                                                    'ZA' => 'Afrique du Sud',
                                                                    'AL' => 'Albanie',
                                                                    'DZ' => 'Algérie',
                                                                    'DE' => 'Allemagne',
                                                                    'AD' => 'Andorre',
                                                                    'AO' => 'Angola',
                                                                    'AI' => 'Anguilla',
                                                                    'AQ' => 'Antarctique',
                                                                    'AG' => 'Antigua-et-Barbuda',
                                                                    'SA' => 'Arabie saoudite',
                                                                    'AR' => 'Argentine',
                                                                    'AM' => 'Arménie',
                                                                    'AW' => 'Aruba',
                                                                    'AU' => 'Australie',
                                                                    'AT' => 'Autriche',
                                                                    'AZ' => 'Azerbaïdjan',
                                                                    'BS' => 'Bahamas',
                                                                    'BH' => 'Bahreïn',
                                                                    'BD' => 'Bangladesh',
                                                                    'BB' => 'Barbade',
                                                                    'BE' => 'Belgique',
                                                                    'BZ' => 'Belize',
                                                                    'BJ' => 'Bénin',
                                                                    'BM' => 'Bermudes',
                                                                    'BT' => 'Bhoutan',
                                                                    'BY' => 'Biélorussie',
                                                                    'BO' => 'Bolivie',
                                                                    'BA' => 'Bosnie-Herzégovine',
                                                                    'BW' => 'Botswana',
                                                                    'BR' => 'Brésil',
                                                                    'BN' => 'Brunéi Darussalam',
                                                                    'BG' => 'Bulgarie',
                                                                    'BF' => 'Burkina Faso',
                                                                    'BI' => 'Burundi',
                                                                    'KH' => 'Cambodge',
                                                                    'CM' => 'Cameroun',
                                                                    'CA' => 'Canada',
                                                                    'CV' => 'Cap-Vert',
                                                                    'CL' => 'Chili',
                                                                    'CN' => 'Chine',
                                                                    'CY' => 'Chypre',
                                                                    'CO' => 'Colombie',
                                                                    'KM' => 'Comores',
                                                                    'CG' => 'Congo-Brazzaville',
                                                                    'CD' => 'Congo-Kinshasa',
                                                                    'KP' => 'Corée du Nord',
                                                                    'KR' => 'Corée du Sud',
                                                                    'CR' => 'Costa Rica',
                                                                    'CI' => 'Côte d’Ivoire',
                                                                    'HR' => 'Croatie',
                                                                    'CU' => 'Cuba',
                                                                    'CW' => 'Curaçao',
                                                                    'DK' => 'Danemark',
                                                                    'DJ' => 'Djibouti',
                                                                    'DM' => 'Dominique',
                                                                    'EG' => 'Égypte',
                                                                    'AE' => 'Émirats arabes unis',
                                                                    'EC' => 'Équateur',
                                                                    'ER' => 'Érythrée',
                                                                    'ES' => 'Espagne',
                                                                    'EE' => 'Estonie',
                                                                    'SZ' => 'Eswatini',
                                                                    'VA' => 'État de la Cité du Vatican',
                                                                    'FM' => 'États fédérés de Micronésie',
                                                                    'US' => 'États-Unis',
                                                                    'ET' => 'Éthiopie',
                                                                    'FJ' => 'Fidji',
                                                                    'FI' => 'Finlande',
                                                                    'FR' => 'France',
                                                                    'GA' => 'Gabon',
                                                                    'GM' => 'Gambie',
                                                                    'GE' => 'Géorgie',
                                                                    'GS' => 'Géorgie du Sud et îles Sandwich du Sud',
                                                                    'GH' => 'Ghana',
                                                                    'GI' => 'Gibraltar',
                                                                    'GR' => 'Grèce',
                                                                    'GD' => 'Grenade',
                                                                    'GL' => 'Groenland',
                                                                    'GP' => 'Guadeloupe',
                                                                    'GU' => 'Guam',
                                                                    'GT' => 'Guatemala',
                                                                    'GG' => 'Guernesey',
                                                                    'GN' => 'Guinée',
                                                                    'GQ' => 'Guinée équatoriale',
                                                                    'GW' => 'Guinée-Bissau',
                                                                    'GY' => 'Guyana',
                                                                    'GF' => 'Guyane française',
                                                                    'HT' => 'Haïti',
                                                                    'HN' => 'Honduras',
                                                                    'HU' => 'Hongrie',
                                                                    'BV' => 'Île Bouvet',
                                                                    'CX' => 'Île Christmas',
                                                                    'IM' => 'Île de Man',
                                                                    'NF' => 'Île Norfolk',
                                                                    'AX' => 'Îles Åland',
                                                                    'KY' => 'Îles Caïmans',
                                                                    'CC' => 'Îles Cocos',
                                                                    'CK' => 'Îles Cook',
                                                                    'FO' => 'Îles Féroé',
                                                                    'HM' => 'Îles Heard et McDonald',
                                                                    'FK' => 'Îles Malouines',
                                                                    'MP' => 'Îles Mariannes du Nord',
                                                                    'MH' => 'Îles Marshall',
                                                                    'UM' => 'Îles mineures éloignées des États-Unis',
                                                                    'PN' => 'Îles Pitcairn',
                                                                    'SB' => 'Îles Salomon',
                                                                    'TC' => 'Îles Turques-et-Caïques',
                                                                    'VG' => 'Îles Vierges britanniques',
                                                                    'VI' => 'Îles Vierges des États-Unis',
                                                                    'IN' => 'Inde',
                                                                    'ID' => 'Indonésie',
                                                                    'IQ' => 'Irak',
                                                                    'IR' => 'Iran',
                                                                    'IE' => 'Irlande',
                                                                    'IS' => 'Islande',
                                                                    'IL' => 'Israël',
                                                                    'IT' => 'Italie',
                                                                    'JM' => 'Jamaïque',
                                                                    'JP' => 'Japon',
                                                                    'JE' => 'Jersey',
                                                                    'JO' => 'Jordanie',
                                                                    'KZ' => 'Kazakhstan',
                                                                    'KE' => 'Kenya',
                                                                    'KG' => 'Kirghizistan',
                                                                    'KI' => 'Kiribati',
                                                                    'KW' => 'Koweït',
                                                                    'RE' => 'La Réunion',
                                                                    'LA' => 'Laos',
                                                                    'LS' => 'Lesotho',
                                                                    'LV' => 'Lettonie',
                                                                    'LB' => 'Liban',
                                                                    'LR' => 'Libéria',
                                                                    'LY' => 'Libye',
                                                                    'LI' => 'Liechtenstein',
                                                                    'LT' => 'Lituanie',
                                                                    'LU' => 'Luxembourg',
                                                                    'MK' => 'Macédoine du Nord',
                                                                    'MG' => 'Madagascar',
                                                                    'MY' => 'Malaisie',
                                                                    'MW' => 'Malawi',
                                                                    'MV' => 'Maldives',
                                                                    'ML' => 'Mali',
                                                                    'MT' => 'Malte',
                                                                    'MA' => 'Maroc',
                                                                    'MQ' => 'Martinique',
                                                                    'MU' => 'Maurice',
                                                                    'MR' => 'Mauritanie',
                                                                    'YT' => 'Mayotte',
                                                                    'MX' => 'Mexique',
                                                                    'MD' => 'Moldavie',
                                                                    'MC' => 'Monaco',
                                                                    'MN' => 'Mongolie',
                                                                    'ME' => 'Monténégro',
                                                                    'MS' => 'Montserrat',
                                                                    'MZ' => 'Mozambique',
                                                                    'MM' => 'Myanmar (Birmanie)',
                                                                    'NA' => 'Namibie',
                                                                    'NR' => 'Nauru',
                                                                    'NP' => 'Népal',
                                                                    'NI' => 'Nicaragua',
                                                                    'NE' => 'Niger',
                                                                    'NG' => 'Nigéria',
                                                                    'NU' => 'Niue',
                                                                    'NO' => 'Norvège',
                                                                    'NC' => 'Nouvelle-Calédonie',
                                                                    'NZ' => 'Nouvelle-Zélande',
                                                                    'OM' => 'Oman',
                                                                    'UG' => 'Ouganda',
                                                                    'UZ' => 'Ouzbékistan',
                                                                    'PK' => 'Pakistan',
                                                                    'PW' => 'Palaos',
                                                                    'PA' => 'Panama',
                                                                    'PG' => 'Papouasie-Nouvelle-Guinée',
                                                                    'PY' => 'Paraguay',
                                                                    'NL' => 'Pays-Bas',
                                                                    'BQ' => 'Pays-Bas caribéens',
                                                                    'PE' => 'Pérou',
                                                                    'PH' => 'Philippines',
                                                                    'PL' => 'Pologne',
                                                                    'PF' => 'Polynésie française',
                                                                    'PR' => 'Porto Rico',
                                                                    'PT' => 'Portugal',
                                                                    'QA' => 'Qatar',
                                                                    'HK' => 'R.A.S. chinoise de Hong Kong',
                                                                    'MO' => 'R.A.S. chinoise de Macao',
                                                                    'CF' => 'République centrafricaine',
                                                                    'DO' => 'République dominicaine',
                                                                    'RO' => 'Roumanie',
                                                                    'GB' => 'Royaume-Uni',
                                                                    'RU' => 'Russie',
                                                                    'RW' => 'Rwanda',
                                                                    'EH' => 'Sahara occidental',
                                                                    'BL' => 'Saint-Barthélemy',
                                                                    'KN' => 'Saint-Christophe-et-Niévès',
                                                                    'SM' => 'Saint-Marin',
                                                                    'MF' => 'Saint-Martin',
                                                                    'SX' => 'Saint-Martin (partie néerlandaise)',
                                                                    'PM' => 'Saint-Pierre-et-Miquelon',
                                                                    'VC' => 'Saint-Vincent-et-les-Grenadines',
                                                                    'SH' => 'Sainte-Hélène',
                                                                    'LC' => 'Sainte-Lucie',
                                                                    'SV' => 'Salvador',
                                                                    'WS' => 'Samoa',
                                                                    'AS' => 'Samoa américaines',
                                                                    'ST' => 'Sao Tomé-et-Principe',
                                                                    'SN' => 'Sénégal',
                                                                    'RS' => 'Serbie',
                                                                    'SC' => 'Seychelles',
                                                                    'SL' => 'Sierra Leone',
                                                                    'SG' => 'Singapour',
                                                                    'SK' => 'Slovaquie',
                                                                    'SI' => 'Slovénie',
                                                                    'SO' => 'Somalie',
                                                                    'SD' => 'Soudan',
                                                                    'SS' => 'Soudan du Sud',
                                                                    'LK' => 'Sri Lanka',
                                                                    'SE' => 'Suède',
                                                                    'CH' => 'Suisse',
                                                                    'SR' => 'Suriname',
                                                                    'SJ' => 'Svalbard et Jan Mayen',
                                                                    'SY' => 'Syrie',
                                                                    'TJ' => 'Tadjikistan',
                                                                    'TW' => 'Taïwan',
                                                                    'TZ' => 'Tanzanie',
                                                                    'TD' => 'Tchad',
                                                                    'CZ' => 'Tchéquie',
                                                                    'TF' => 'Terres australes françaises',
                                                                    'IO' => 'Territoire britannique de l’océan Indien',
                                                                    'PS' => 'Territoires palestiniens',
                                                                    'TH' => 'Thaïlande',
                                                                    'TL' => 'Timor oriental',
                                                                    'TG' => 'Togo',
                                                                    'TK' => 'Tokelau',
                                                                    'TO' => 'Tonga',
                                                                    'TT' => 'Trinité-et-Tobago',
                                                                    'TN' => 'Tunisie',
                                                                    'TM' => 'Turkménistan',
                                                                    'TR' => 'Turquie',
                                                                    'TV' => 'Tuvalu',
                                                                    'UA' => 'Ukraine',
                                                                    'UY' => 'Uruguay',
                                                                    'VU' => 'Vanuatu',
                                                                    'VE' => 'Venezuela',
                                                                    'VN' => 'Vietnam',
                                                                    'WF' => 'Wallis-et-Futuna',
                                                                    'YE' => 'Yémen',
                                                                    'ZM' => 'Zambie',
                                                                    'ZW' => 'Zimbabwe',
                                                                ];
                                                                echo $countries[$responsable->country];
                                                            @endphp


                                                        </a>
                                                    </li>
                                                @endif
                                                <br>
                                                @if (isset($responsable->phone))
                                                    <li class="m-0 pr-10"> <i
                                                            class="fa fa-phone text-theme-colored2 mr-5"></i>
                                                        <a class="text-gray font-12"
                                                            href="#">{{ $responsable->phone }}</a>
                                                    </li>
                                                @endif
                                                <br>
                                                @if (isset($responsable->email))
                                                    <li class="m-0 pr-10"> <i
                                                            class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                                        <a class="text-gray font-12"
                                                            href="mailto:{{ $responsable->email }}">{{ $responsable->email }}</a>
                                                    </li>
                                                @endif
                                            </ul>
                                            <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                                                <li><a href="#" style="pointer-events:none;"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" style="pointer-events:none;"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" style="pointer-events:none;"><i
                                                            class="fa fa-vk"></i></a></li>
                                                <li><a href="#" style="pointer-events:none;"><i
                                                            class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" style="pointer-events:none;"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                        
                        </div>
                        <div class="col-sm-8">
                            <h4 class="name font-24 mt-0 mb-0">{{ $responsable->name }} {{ $responsable->surname }}</h4>
                            <h5 class="mt-5">
                                @if (App::isLocale('en'))
                                    {{ $responsable->poste_en }}
                                @else
                                    {{ $responsable->poste }}
                                @endif
                            </h5>
                            <div style="text-align:justify;hyphens:auto;color:#1f3344;font-size:16px;">
                                @if (App::isLocale('en'))
                                    {!! $responsable->competence_en !!}
                                @else
                                    {!! $responsable->competence !!}
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row mt-30">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
