<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = validator($request->all(),[
            'comment'=>'required'
        ],[

        ]);

        if( ! $validator->fails()){
            $comments = new comment();
            $comments->comment= $request->get('comment');
            $comments->visitor_id= $request->get('user_id');
            $comments->article_id= $request->get('article_id');


            $isSaved = $comments->save();

            if($isSaved){
                return response()->json(['icon' => 'success','title'=>'Send is Successfully'],200);
            } else{
                return response()->json(['icon' => 'error','title'=>'Send is Failed'],400);

            }


        }else{
            return response()->json(['icon'=>'error','title'=>$validator->getMessageBag()->first()],400);
        }
    }

}
