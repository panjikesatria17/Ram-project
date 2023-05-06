<?php

namespace App\Http\Controllers;

use App\Models\Datanasabah;
use Illuminate\Http\Request;
use App\Exports\DatanasabahExport;
use App\Imports\DatanasabahImport;
use Maatwebsite\Excel\Facades\Excel;

class DatanasabahController extends Controller
{
    public function signin()
    {
        return view('signin');
    }


    public function index()
    {
        $data = Datanasabah::all();
        return view('admin.datanasabah', compact('data'));
    }

    public function dashboardadmin()
    {
        return view('admin.dashboardadmin');
    }

    public function tambahdata()
    {
        return view('admin.tambahdata');
    }

    public function insertdata(Request $request)
    {
        //dd($request->all());
        Datanasabah::create($request->all());
        return redirect()->route('datanasabah');
    }


    public function tampildata($id)
    {

        $data = Datanasabah::find($id);
        //dd($data);
        return view('admin.tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Datanasabah::find($id);
        $data->update($request->all());
        return redirect()->route('datanasabah');
    }

    public function delete($id)
    {
        $data = Datanasabah::find($id);
        $data->delete();
        return redirect()->route('datanasabah');
    }

    public function exportexcel()
    {
        return Excel::download(new DatanasabahExport, 'datanasabah.xlsx');
    }

    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('DatanasabahNew', $namafile);

        Excel::import(new DatanasabahImport, public_path('/DatanasabahNew/' . $namafile));
        return redirect()->back();
    }

    public function dataonproces()
    {
        $data = Datanasabah::all();
        return view('admin.dataonproces', compact('data'));
    }

    public function viewsdata()
    {
        $data = Datanasabah::all();
        return view('admin.viewsdata', compact('data'));
    }

    public function oneextanded()
    {
        $data = Datanasabah::all();
        return view('admin.oneextanded', compact('data'));
    }

    public function twoextanded()
    {
        $data = Datanasabah::all();
        return view('admin.twoextanded', compact('data'));
    }

    public function assetptp()
    {
        $data = Datanasabah::all();
        return view('admin.assetptp', compact('data'));
    }

    public function returnasset()
    {
        $data = Datanasabah::all();
        return view('admin.returnasset', compact('data'));
    }

    public function extandedptp()
    {
        $data = Datanasabah::all();
        return view('admin.extandedptp', compact('data'));
    }

    public function assetbpone()
    {
        $data = Datanasabah::all();
        return view('admin.assetbpone', compact('data'));
    }

    public function assetbptwo()
    {
        $data = Datanasabah::all();
        return view('admin.assetbptwo', compact('data'));
    }

    public function currentassetwo()
    {
        $data = Datanasabah::all();
        return view('admin.currentassetwo', compact('data'));
    }


    //Methode Agent

    public function dashboard_agent()
    {
        return view('agent.dashboard-agent');
    }
}
