<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\DailyReportRequest;
use Illuminate\Http\Request;
use App\Models\DailyReport;
use Illuminate\Support\Facades\Auth;

class DailyReportController extends Controller
{

    protected $report;

    public function __construct(DailyReport $report){

        $this->middleware('auth');
        $this->report = $report;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = Auth::id();
        $inputs = $request->all();
        $dailyrepors = $this->report->get();
        // dd($dailyrepors);


        return view('user.daily_report.index', compact('dailyrepors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.daily_report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $this->dailyreport->fill($inputs)->save();
        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daily = $this->dailyreport->find($id);
        return view('user.daily_report.edit',compact('daily'));
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
        $input = $request->all();
        $this->dailyreport->find($id)->fill($input)->save();
        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->todo->find($id)->delete();
        return redirect()->route('report.index');
    }
}
