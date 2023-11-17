<?php

namespace App\Http\Controllers;


use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //Главная страница - показывает все обьекты в бд
   public function show(){
       $infos = info::all();
       return view('info', compact('infos'));

   }


//поиск обьекта
    public function search()
    {
        return view('search');
    }

//Поиск обьекта возвращение
    public function explore(Request $request){
        $input = $request->input('explore');

        //Получаю необхимые объекты из базы данных по фильтру
        //$data = info::where('name', '=', $input)->get();
        $data = DB::table('info')->where('name', $input)->first();

        return view('search_result', compact('data'));
    }

    //Добавить обьект
    public function add(){
       return view('add');
    }
    public function addComplete(Request $request){
        $data = $request->all(); // Получаем только нужные поля из запроса

        $info = Info::create($data); // Создаем новую запись в таблице "info"

        return redirect()->back()->with('success', 'Информация успешно сохранена!');
    }

}

