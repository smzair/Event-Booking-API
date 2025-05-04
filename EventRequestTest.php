<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Support\Facades\Validator;

class EventRequestTest extends TestCase
{
    public function test_event_request_validation_rules()
    {
        $request = new StoreEventRequest();

        $rules = $request->rules();

        $this->assertArrayHasKey('title', $rules);
        $this->assertArrayHasKey('capacity', $rules);
    }
}
