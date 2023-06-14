<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribersStoreRequest;
use Core\States\Application\Search\GetAllStates;

use Core\Subscribers\Application\Create\CreateSubscribers;
use Core\Subscribers\Application\Search\GetAllSubcribers;

use Core\Subscribers\Application\DTO\SubscribersRequestDTO;

class SubcribersController extends Controller
{

    private $getAllStates;
    private $createSubscribers;
    private $getAllSubcribers;
    public function __construct(GetAllStates $getAllStates,CreateSubscribers $createSubscribers,GetAllSubcribers $getAllSubcribers)
    {
        $this->getAllStates = $getAllStates;
        $this->createSubscribers = $createSubscribers;
        $this->getAllSubcribers = $getAllSubcribers;
    }

    public function index() 
    {
        $subcribers = $this->getAllSubcribers->__invoke();
        $states = $this->getAllStates->__invoke();
        return view('subcribers/index', [
            'states' => $states,
            'subcribers' => $subcribers,
        ]);
    }
    
    public function store(SubscribersStoreRequest $request)
    {

        $dtoRequest = new SubscribersRequestDTO($request->email,$request->state_id);
        $this->createSubscribers->__invoke($dtoRequest);
        return redirect()->route('subcribers');
    }
}
