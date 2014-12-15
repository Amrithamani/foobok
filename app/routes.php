<?php

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

# Homepage
Route::get('/', function() {

    return View::make('index');

 });

// List all books / search
Route::get('/list/{format?}', function($format='html') {

	 $query = Input::get('query');

	 $library = new Library();
	 $library->setPath(app_path().'/database/books.json');
	 $books = $library->getBooks();

	if($query) {
	        $books = $library->search($query);
    }

	if($format == 'json'){
		return 'JSON Version';
	}
	elseif($format == 'pdf'){
		return 'PDF Version';
	}
	else{
		return View::make('list')
			->with('name','Amritha')
			->with('books',$books)
			->with('query',$query);
	}
    });



// Display the form for a new book
Route::get('/add', function() {

	return View::make('add');

 });

// Process form for a new book
Route::post('/add', function() {

	return "Here are the books in the category: ".$category;

 });

// Display the form to edit a book
Route::get('/edit/{title}', function() {

});


// Process form for a edit book
Route::post('/edit/', function() {


});

Route::get('/data', function(){


			$library= new Library();

			$library->setPath(app_path().'/database/books.json');

			$books = $library->getBooks();

			//Return the file
    		echo Pre::render($books);

});