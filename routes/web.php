<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function(){
    //$products = \App\Product::all(); //select * from products

   // $user = new \App\User(); //Cadastrar novo usuário
  //  $user = \App\User::find(1); //Método para atualizar informações
  //  $user->name = 'Usuário Editado';
    //$user->email = 'email@teste.com';
    //$user->password = bcrypt('12345678');
  //  $user->save();
    // \App\User::All() retorna todos os usuários
    // \App\User::find(2); //retornoa com baso no id
    // \App\User::where('name', 'Usuário Teste2')->get(); //select * from users where name = 'Usuário Teste2'
    // \App\User::paginate(1); //Traz os arquivos paginados

    //Mass Assignment - Atribuição em massa

    //$user = \App\User::create([
    //    'name' => 'Danilo Augusto',
    //   'email' => 'email100@email.com',
    //    'password' => bcrypt('123345566')
    //]);

    //dd($user);

    //Mass Update
    //$user = \App\User::find(47);
    //$user->update([
    //    'name' => 'Danilo Augusto Pacheco'
    //]); //true ou false
    //dd($user);

    //Como eu faria para pegar uma lija de um usuário
    //$user = \App\User::find(4);

    //dd($user->store()->count());

    //PEgar os produtos de uma loja
    //$loja = \App\Store::find(1);
    //return $loja->products;

    //Criar uma loja para um usuário
    //$user = \App\User::find(10);
    //$store = $user->store()->create([
    //    'name' => 'Loja Teste',
    //    'description' => 'Loja de teste de produtos de informática',
    //    'mobile_phone' => 'xx-xxxxx-xxxx',
    //    'phone' => 'xx-xxxxx-xxxx',
    //    'slug' => 'loja-teste'
    //]);


    //Criar um produto para uma loja
    ///$store = \App\Store::find(41);
    //$product = $store->products()->create([
    //    'name' => 'Notebook Dell',
    //    'description' => 'CORE I5 10GB',
    //    'body' => 'Qualquer coisa...',
    //    'price' => 2999.90,
    //    'slug' => 'notebook-dell',
    //]);

    //dd($product);

    //Criar uma categoria
    //\App\Category::create([
      //  'name' => 'Games',
        //'description' => null,
        //'slug' => 'games'
    //]);

    //\App\Category::create([
      //  'name' => 'Notebooks',
        //'description' => null,
        //'slug' => 'notebooks'
    //]);

    //return \App\Category::all();


    //Adicionar um produto para um a categoria ou vice-versa
    $product = \App\Product::find(2);
    //dd($product->categories()->attach([2])); //Adiciona ao produto de ID 2 o id da catedoria 2
    //dd($product->categories()->detach([2])); //Remove a ligação

    dd($product->categories()->sync([2])); //Atualiza, se exixtir ou insere se nao existir

   return \App\User::All();

    //return $products;
});



Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

    //Route::prefix('stores')->name('stores.')->group(function(){

     //   Route::get('/', 'StoreController@index')->name('index');
     //   Route::get('/create', 'StoreController@create')->name('create');
     //   Route::post('/store', 'StoreController@store')->name('store');
      //  Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
      //  Route::post('/update/{store}', 'StoreController@update')->name('update');
      //  Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');

   // });
    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
