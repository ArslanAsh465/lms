<?php

namespace App\Http\Controllers;

use App\Contracts\PersonalInformationContract;
use App\Exceptions\CustomException;
use App\Helpers\Helper;
use App\Http\Requests\CreatePersonalInformationRequest;
use App\Http\Requests\UpdatePersonalInformationRequest;
use App\Models\Country;
use Faker\Extension\CountryExtension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserPersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $personal_information;
    public function __construct(PersonalInformationContract $personal_information)
    {
        $this->personal_information = $personal_information;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $user = $this->personal_information->create();
            if ($user === false) {
                return redirect()->route('user.personal-information.edit', Auth::id());
            }
            $countries = Country::pluck('name', 'id');
            return view('user.personal_information.create', compact('countries'));
        } catch (CustomException $e) {
            flash($e->getMessage())->error();
            return back();
        } catch (\Exception $e) {
            Helper::logMessage('personal Information create ', 'none', $e->getMessage());
            flash("Something Went Wrong!")->error();
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonalInformationRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->personal_information->store($request->prepareRequest());
            DB::commit();
            flash('Personal Information Saved Successfully.')->success();
            return redirect()->route('user.academic-information.create');
        } catch (CustomException $th) {
            DB::rollback();
            flash($th->getMessage())->error();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            Helper::logMessage('personal Information store ', $request->input(), $e->getMessage());
            flash("Something Went Wrong!")->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $user = $this->personal_information->edit($id);
            $countries = Country::pluck('name', 'id');
            return view('user.personal_information.edit', compact('user', 'countries'));
        } catch (CustomException $e) {
            flash($e->getMessage())->error();
            return back();
        } catch (\Exception $e) {
            Helper::logMessage('personal Information edit ', 'id=' . $id, $e->getMessage());
            flash("Something Went Wrong!")->error();
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalInformationRequest $request, string $id)
    {
        try {
            DB::beginTransaction();
            $this->personal_information->update($request->prepareRequest(), $id);
            DB::commit();
            flash('Personal Information Updated Successfully.')->success();
            return redirect()->route('user.academic-information.create');
        } catch (CustomException $th) {
            DB::rollback();
            flash($th->getMessage())->error();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            Helper::logMessage('personal Information Update ', $request->input(), $e->getMessage());
            flash("Something Went Wrong!")->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
    public function getStates(Request $request)
    {
        try {
            $states = $this->personal_information->getStates($request->all());
            return $this->successResponse($states);
        } catch (CustomException $th) {
            return $this->failedResponse($th->getMessage());
            return back();
        } catch (\Exception $e) {
            Helper::logMessage('personal Information Update ', $request->all(), $e->getMessage());
            return $this->failedResponse('Something Went Wrong!');
            return back();
        }
    }
    public function getDomicileCity(Request $request)
    {
        try {
            $states = $this->personal_information->getDomicile($request->all());
            return $this->successResponse($states);
        } catch (CustomException $th) {
            return $this->failedResponse($th->getMessage());
            return back();
        } catch (\Exception $e) {
            Helper::logMessage('get Domicile ', $request->all(), $e->getMessage());
            return $this->failedResponse('Something Went Wrong!');
            return back();
        }
    }
}
