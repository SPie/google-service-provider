<?php

return [
    'client' => [

        'application_name' => env('GOOGLE_APPLICATION_NAME', ''),

        // Don't change these unless you're working against a special development
        // or testing environment.
        'base_path' => env('GOOGLE_BASE_PATH', Google_Client::API_BASE_PATH),

        // https://developers.google.com/console
        'client_id' => env('GOOGLE_CLIENT_ID', ''),
        'client_secret' => env('GOOGLE_CLIENT_SECRET', ''),
        'redirect_uri' => env('GOOGLE_REDIRECT_URI', null),
        'state' => env('GOOGLE_STATE', null),

        // Simple API access key, also from the API console. Ensure you get
        // a Server key, and not a Browser key.
        'developer_key' => env('GOOGLE_DEVELOPER_KEY', ''),

        // For use with Google Cloud Platform
        // fetch the ApplicationDefaultCredentials, if applicable
        // @see https://developers.google.com/identity/protocols/application-default-credentials
        'use_application_default_credentials' => env('GOOGLE_USE_APPLICATION_DEFAULT_CREDENTIALS', false),
        'signing_key' => env('GOOGLE_SIGNING_KEY', null),
        'signing_algorithm' => env('GOOGLE_SIGNING_ALGORITHM', null),
        'subject' => env('GOOGLE_SUBJECT', null),

        // Other OAuth2 parameters.
        'hd' => env('GOOGLE_HD', ''),
        'prompt' => env('GOOGLE_PROMPT', ''),
        'openid.realm' => env('GOOGLE_OPENID_REALM', ''),
        'include_granted_scopes' => env('GOOGLE_INCLUDE_GRANTED_SCOPES', null),
        'login_hint' => env('GOOGLE_LOGIN_HINT', ''),
        'request_visible_actions' => env('GOOGLE_REQUEST_VISIBLE_ACTIONS', ''),
        'access_type' => env('GOOGLE_ACCESS_TYPE', 'online'),
        'approval_prompt' => env('GOOGLE_APPROVAL_PROMPT', 'auto'),

        // Task Runner retry configuration
        // @see Google_Task_Runner
        'retry' => env('GOOGLE_RETRY', []),

        // cache config for downstream auth caching
        'cache_config' => env('GOOGLE_CACHE_CONFIG', []),

        // function to be called when an access token is fetched
        // follows the signature function ($cacheKey, $accessToken)
        'token_callback' => env('GOOGLE_TOKEN_CALLBACK', null),

        // Service class used in Google_Client::verifyIdToken.
        // Explicitly pass this in to avoid setting JWT::$leeway
        'jwt' => env('GOOGLE_JWT', null),
    ],

    'services' => [
//        \Google_Service_AbusiveExperienceReport::class,
//        \Google_Service_Acceleratedmobilepageurl::class,
//        \Google_Service_AdExchangeBuyer::class,
//        \Google_Service_AdExchangeBuyerII::class,
//        \Google_Service_AdExchangeSeller::class,
//        \Google_Service_AdExperienceReport::class,
//        \Google_Service_AdSense::class,
//        \Google_Service_AdSenseHost::class,
//        \Google_Service_Analytics::class,
//        \Google_Service_AnalyticsReporting::class,
//        \Google_Service_AndroidEnterprise::class,
//        \Google_Service_AndroidManagement::class,
//        \Google_Service_AndroidProvisioningPartner::class,
//        \Google_Service_AndroidPublisher::class,
//        \Google_Service_AppState::class,
//        \Google_Service_Appengine::class,
//        \Google_Service_Appsactivity::class,
//        \Google_Service_Autoscaler::class,
//        \Google_Service_BigQueryDataTransfer::class,
//        \Google_Service_Bigquery::class,
//        \Google_Service_Blogger::class,
//        \Google_Service_Books::class,
//        \Google_Service_Calendar::class,
//        \Google_Service_Chromewebstore::class,
//        \Google_Service_Cih::class,
//        \Google_Service_CivicInfo::class,
//        \Google_Service_Classroom::class,
//        \Google_Service_CloudBuild::class,
//        \Google_Service_CloudComposer::class,
//        \Google_Service_CloudDebugger::class,
//        \Google_Service_CloudFunctions::class,
//        \Google_Service_CloudIot::class,
//        \Google_Service_CloudKMS::class,
//        \Google_Service_CloudMachineLearning::class,
//        \Google_Service_CloudMachineLearningEngine::class,
//        \Google_Service_CloudMonitoring::class,
//        \Google_Service_CloudNaturalLanguage::class,
//        \Google_Service_CloudNaturalLanguageAPI::class,
//        \Google_Service_CloudOSLogin::class,
//        \Google_Service_CloudRedis::class,
//        \Google_Service_CloudResourceManager::class,
//        \Google_Service_CloudRuntimeConfig::class,
//        \Google_Service_CloudShell::class,
//        \Google_Service_CloudSourceRepositories::class,
//        \Google_Service_CloudSpeechAPI::class,
//        \Google_Service_CloudTasks::class,
//        \Google_Service_CloudTrace::class,
//        \Google_Service_CloudUserAccounts::class,
//        \Google_Service_CloudVideoIntelligence::class,
//        \Google_Service_Cloudbilling::class,
//        \Google_Service_Clouderrorreporting::class,
//        \Google_Service_Cloudlatencytest::class,
//        \Google_Service_Compute::class,
//        \Google_Service_ConsumerSurveys::class,
//        \Google_Service_Container::class,
//        \Google_Service_Coordinate::class,
//        \Google_Service_Customsearch::class,
//        \Google_Service_DLP::class,
//        \Google_Service_DataTransfer::class,
//        \Google_Service_Dataflow::class,
//        \Google_Service_Dataproc::class,
//        \Google_Service_Datastore::class,
//        \Google_Service_DeploymentManager::class,
//        \Google_Service_Devprojects::class,
//        \Google_Service_Dfareporting::class,
//        \Google_Service_Dialogflow::class,
//        \Google_Service_Digitalassetlinks::class,
//        \Google_Service_Directory::class,
//        \Google_Service_Dns::class,
//        \Google_Service_DoubleClickBidManager::class,
//        \Google_Service_Doubleclicksearch::class,
//        \Google_Service_Drive::class,
//        \Google_Service_FirebaseDynamicLinks::class,
//        \Google_Service_FirebaseDynamicLinksAPI::class,
//        \Google_Service_FirebaseRemoteConfig::class,
//        \Google_Service_FirebaseRules::class,
//        \Google_Service_FirebaseRulesAPI::class,
//        \Google_Service_Firestore::class,
//        \Google_Service_Fitness::class,
//        \Google_Service_FlightAvailability::class,
//        \Google_Service_Freebase::class,
//        \Google_Service_Fusiontables::class,
//        \Google_Service_Games::class,
//        \Google_Service_GamesConfiguration::class,
//        \Google_Service_GamesManagement::class,
//        \Google_Service_Genomics::class,
//        \Google_Service_Gmail::class,
//        \Google_Service_GroupsMigration::class,
//        \Google_Service_Groupssettings::class,
//        \Google_Service_HangoutsChat::class,
//        \Google_Service_Iam::class,
//        \Google_Service_IdentityToolkit::class,
//        \Google_Service_JobService::class,
//        \Google_Service_Kgsearch::class,
//        \Google_Service_Licensing::class,
//        \Google_Service_Logging::class,
//        \Google_Service_Manager::class,
//        \Google_Service_ManufacturerCenter::class,
//        \Google_Service_Mirror::class,
//        \Google_Service_Monitoring::class,
//        \Google_Service_Oauth2::class,
//        \Google_Service_Pagespeedonline::class,
//        \Google_Service_Partners::class,
//        \Google_Service_People::class,
//        \Google_Service_PeopleService::class,
//        \Google_Service_PhotosLibrary::class,
//        \Google_Service_PlayMovies::class,
//        \Google_Service_Playcustomapp::class,
//        \Google_Service_Playmoviespartner::class,
//        \Google_Service_Plus::class,
//        \Google_Service_PlusDomains::class,
//        \Google_Service_PolyService::class,
//        \Google_Service_Prediction::class,
//        \Google_Service_Proximitybeacon::class,
//        \Google_Service_Pubsub::class,
//        \Google_Service_QPXExpress::class,
//        \Google_Service_Replicapool::class,
//        \Google_Service_Replicapoolupdater::class,
//        \Google_Service_Reportcard::class,
//        \Google_Service_Reports::class,
//        \Google_Service_Reseller::class,
//        \Google_Service_Resourceviews::class,
//        \Google_Service_SQLAdmin::class,
//        \Google_Service_Safebrowsing::class,
//        \Google_Service_Script::class,
//        \Google_Service_SearchConsole::class,
//        \Google_Service_ServiceBroker::class,
//        \Google_Service_ServiceConsumerManagement::class,
//        \Google_Service_ServiceControl::class,
//        \Google_Service_ServiceManagement::class,
//        \Google_Service_ServiceRegistry::class,
//        \Google_Service_ServiceUsage::class,
//        \Google_Service_ServiceUser::class,
//        \Google_Service_Sheets::class,
//        \Google_Service_ShoppingContent::class,
//        \Google_Service_SiteVerification::class,
//        \Google_Service_Slides::class,
//        \Google_Service_Spanner::class,
//        \Google_Service_Spectrum::class,
//        \Google_Service_Speech::class,
//        \Google_Service_Storage::class,
//        \Google_Service_Storagetransfer::class,
//        \Google_Service_StreetViewPublish::class,
//        \Google_Service_Surveys::class,
//        \Google_Service_TPU::class,
//        \Google_Service_TagManager::class,
//        \Google_Service_Taskqueue::class,
//        \Google_Service_Tasks::class,
//        \Google_Service_Testing::class,
//        \Google_Service_Texttospeech::class,
//        \Google_Service_ToolResults::class,
//        \Google_Service_Tracing::class,
//        \Google_Service_Translate::class,
//        \Google_Service_Urlshortener::class,
//        \Google_Service_Vault::class,
//        \Google_Service_Vision::class,
//        \Google_Service_WebSecurityScanner::class,
//        \Google_Service_Webfonts::class,
//        \Google_Service_Webmasters::class,
//        \Google_Service_YouTube::class,
//        \Google_Service_YouTubeAnalytics::class,
//        \Google_Service_YouTubeReporting::class,
    ],
];