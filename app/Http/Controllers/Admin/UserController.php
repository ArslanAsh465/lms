<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\UserContract;
use App\DataTables\UserDataTable;
use App\Exceptions\CustomException;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Termwind\render;

class UserController extends Controller
{
    public $user;
    public function __construct(UserContract $user)
    {
        $this->user = $user;
    }
    public function index(UserDataTable $userDataTable)
    {
        try {
            return $userDataTable->render('admin.users.index');
        } catch (CustomException $e) {
            flash($e->getMessage())->error();
            return back();
        } catch (\Exception $e) {
            Helper::logMessage('index userController ', 'none', $e->getMessage());
            flash("Something Went Wrong!")->error();
            return back();
        }
    }
}
