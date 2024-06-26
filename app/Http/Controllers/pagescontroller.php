<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\estate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class pagescontroller extends Controller
{
    //

    public function home()
    {

        return view('Pages.welcome',
        ['estates'=>estate::latest()
        ->paginate(8)
        ]
    // ['owned'=>auth()->user()->estate::latest()->paginate(8)]
    );
    }
    public function show($id)
    {
        return view('Pages.show',[
            'estate'=> estate::find($id)
        ]);
    }

    public function buy()
    {

        return view('Pages.buy',[
            'estate'=>estate::latest()->get()
        ]);
    }

    public function sell()
    {
        return view('Pages.sell');
    }
    public function help()
        {
        return view('Pages.help');
       }

    public function edit(estate $estate)
    {

        return view('Pages.edit',[
            'estate'=> $estate
        ]);

    }

    public function store(Request $request)
    {
        $FormFields=$request->validate(
            [
                'Location'=>'required|min:3',
                'Number_of_Beds'=>'required|numeric',
                'Number_Of_Bathrooms'=>'required|numeric',
                'price'=>'required|numeric|digits_between:3,15',
                'cartegory'=>'required',
                'area'=>'required|numeric',
                'status'=>'required',
                'photo'=>['required',File::image()
                ->min('1kb')
                ->max('10mb')
                ]
            ]
            );
            if($FormFields){

                estate::create(
                    [
                        'Location'=>$request->Location,
                        'NumberOfBeds'=>$request->Number_of_Beds,
                        'NumberOfBathrooms'=>$request->Number_Of_Bathrooms,
                        'SellingPrice'=>$request->price,
                        'Cartegory'=>$request->cartegory,
                        'Description'=>$request->Description,
                        'Area'=>$request->area,
                        'photo'=>$this->storeImage($request),
                        'User_id'=>auth()->id()
                    ]
                );
                return redirect('/')->with('message','House posted successfully');
            }
    }
    private function storeImage($request)
    {
        $newimagename=time().'.'.$request->photo->extension();
        return $request->photo->move('storage',$newimagename);
    }


    public function update(Request $request, estate $estate)
    {
        $FormFields=$request->validate(
            [
                'Location'=>'required|min:3',
                'Number_of_Beds'=>'required|numeric',
                'Number_Of_Bathrooms'=>'required|numeric',
                'price'=>'required|numeric|digits_between:3,15',
                'cartegory'=>'required',
                'area'=>'required|numeric',
                // 'status'=>'required',
                'photo'=>[File::image()
                ->min('1kb')
                ->max('10mb'),
                ]
            ]
            );
            if($FormFields){

                $estate->update(
                    [
                        'Location'=>$request->Location,
                        'NumberOfBeds'=>$request->Number_of_Beds,
                        'NumberOfBathrooms'=>$request->Number_Of_Bathrooms,
                        'SellingPrice'=>$request->price,
                        'Cartegory'=>$request->cartegory,
                        'Description'=>$request->Description,
                        'Area'=>$request->area,
                        // 'photo'=>storeImageup($request),
                    ]
                );
                if($request->hasFile('photo')){
                    $FormFields['photo'] =$request->file('photo')->store('storage','public');
                }

                return back()->with('message','House updated successfully');
            }

    }
}






