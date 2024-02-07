<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Expense;
use Illuminate\Support\Facades\Session;

class ExpenseRecordController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }

    public function loginUser(Request $request){
        $usertable = new User();
        $userresult=$usertable->where('email',$request->email)->where('password',$request->password)->first();
        if(!empty($userresult)){
            session()->put("email",$request->email);
            return redirect('dashboard');

        }else{
            /*$output="wrong credentials";
            return $output;*/
            return redirect('login')->withErrors('Email and Pasword not matched.!!');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function addIncome(){
        return view('/addIncome');
    }
    public function Expenses($email){
        return view('/addExpenses');
    }

    public function addExpenses(Request $request,$email){

        $request->validate(
            [
                'Amount' =>'required|numeric',
                'Date' => "required",
                'Month' => 'required',
                'Category' => 'required'
            ]
        );
        $temp= $email;
        $expenses = new Expense();
        $expenses ->amount = $request->input('Amount');
        $expenses ->date = $request->input('Date');
        $expenses ->month = $request->input('Month');
        $expenses ->category = $request->input('Category');
        $expenses ->userEmail = $temp;
        $expenses ->save();
        return redirect('dashboard')->with('status',"Inserted successfully");
    }

    public function deposit(){
        return view('/addDeposit');
    }
    public function addDeposit(Request $request,$email){
        $request->validate(
            [
                'Amount' =>'required|numeric',
                'Month' => 'required',
            ]
        );
        $temp= $email;
        $deposits = new Deposit();
        $deposits ->DepositAmount = $request->input('Amount');
        $deposits ->Month = $request->input('Month');
        $deposits ->UserEmail = $temp;
        $deposits ->save();
        return redirect('dashboard')->with('status',"Inserted successfully");
    }

    public function monthlyReport(Request $request, $email){

        $total=0;
        $totalDeposit=0;
        if(isset($_GET['query']))
        {
            $search_text=$_GET['query'];
            $depositsQuery=DB::table('deposits')->where('UserEmail',$email)->where('Month','LIKE','%'.$search_text.'%')->paginate();
            $expenses=DB::table('expenses')->where('UserEmail',$email)->where('Month','LIKE','%'.$search_text.'%')->paginate();
            //return view('monthlyReport',['expenses'=>$expenses,'total'=>$total,'desposits'=>$deposits ]);
            return view('monthlyReport',compact('expenses','total','depositsQuery','totalDeposit'));

        }
        else
        {
            return view('monthlyReport');
        }

    }
    public function logout(){
        Session:: flush();
        Auth::logout();
        return redirect('/login');
    }



}
