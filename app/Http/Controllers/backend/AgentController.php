<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agentDashboard()
    {
        return view('agent.dashboard');
    }
}