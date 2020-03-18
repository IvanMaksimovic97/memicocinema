<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Log;
use App\Models\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(Request $request) {
        $response['actions'] = Action::all();
        $response['tables'] = Table::all();

        $actionType = $request->actionType;
        $table = $request->table;

        $logs = Log::orderBy('created_at','desc');

        if (isset($actionType) && $actionType != 0) {
            $logs = $logs->whereHas('action', function (Builder $query) use ($actionType) {
                $query->where('actions.id','=',$actionType);
            });
        }
        if (isset($table) && $table != 0) {
            $logs = $logs->whereHas('table', function (Builder $query) use ($table) {
                $query->where('tables.id','=',$table);
            });
        }

        $response['logs'] = $logs->paginate(10);

        if($request->ajax())
            return view('partial.admin.display.logsTable')->with($response)->render();
        else
            return view('pages.admin.logs')->with($response);
    }
}
