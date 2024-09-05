<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HalamanawalController;
use App\Http\Controllers\HcareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', [WelcomeController::class,'hello']); 
    
Route::get('/world', function () { 
return 'World'; 
}); 

Route::get('/welcome', function () { 
    return 'Selamat Datang'; 
    }); 

Route::get('/about', function () { 
    return 'Triandika Nursyamsa Darmawan | 2141762094'; 
    }); 

    Route::get('/user/{name}', function ($name) { 
        return 'Nama saya '.$name; 
        }); 

        Route::get('/posts/{post}/comments/{comment}', function 
        ($postId, $commentId) { 
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
        });

        Route::get('/articles/{id}', function ($id) { 
        return 'Halaman Artikel dengan ID '. $id; 
        });

        Route::get('/user/{name?}', function ($name='John') { 
            return 'Nama saya '.$name; 
         });

        Route::get('/index', [HomeController::class,'index']); 

        Route::get('/about', [AboutController::class,'about']); 

        Route::get('/articles', [ArticleController::class,'articles']); 

        use App\Http\Controllers\PhotoController;
use Symfony\Component\Routing\Attribute\Route as AttributeRoute;

        Route::resource('photos', PhotoController::class); 
        Route::resource('photos', PhotoController::class)->only([ 
            'index', 'show' 
            ]); 
            Route::resource('photos', PhotoController::class)->except([ 
            'create', 'store', 'update', 'destroy' 
            ]); 
            
            Route::get('/greeting', [WelcomeController::class, 'greeting']);

            Route::get('/home',[HalamanawalController::class,'home']);

            Route::prefix('/category')->group(function () { 
                Route::get('/food', [FoodController::class, 'food']); 
                Route::get('/beauty', [BeautyController::class, 'beauty']); 
                Route::get('/hcare', [HcareController::class, 'hcare']); 
                Route::get('/baby', [BabyController::class, 'baby']); 
                
               }); 
               Route::get('/TugasUser/{id?}', function ($name) { 
                return 'Penjualan dengan Id '.$name; 
             });
        
            
            


