<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductInsertFormRequest;
use Storage;
use App\Product;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInsertFormRequest $request)
    {
        $images = $request->file('image');
        $imageArr = array();
        foreach ($images as $image) {
            $imageName = uniqid() . "_" . $image->getClientOriginalName();
            array_push($imageArr, $imageName);
            $image->move(public_path().'/img/uploads/', $imageName);
        }
        Product::create([
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'imgs'=>serialize($imageArr)
        ]);

        /*$data = [
            'title' => 'New item from Shopkeeper!',
            'content' => 'This is the new item now.\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];

        Mail::send('mail.mailTemplate1', $data, function ($message) {
            $mailSubject = 'Adding new item !';
            $toMail = 'zinmarhtun47@gmail.com';
            $userName = 'Tester';
            $message->to($toMail, $userName)->subject($mailSubject);
        });*/

        return redirect('products/create')->with('status', 'Successfully Inserted Data.');

        /*$image = $request->file('image');
        $image_name = uniqid() . '_' . $image->getClientOriginalName();
        $image->move(public_path().'/img/uploads/', $image_name);*/
        //Storage::put('public/uploads/' . $image->getClientOriginalName(), file_get_contents($image));

        /*Product::create([
           'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'imgs'=>$image_name
        ]);
        return redirect('products/create')->with('status', 'Successfully Inserted Data.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
