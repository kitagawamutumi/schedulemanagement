<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'schedule.title' => 'required',
            'schedule.body' => 'required',
            'schedule.start_at' => 'required' ,
            'schedule.sub_title' => 'required',
            'schedule.due_at' => 'required',
            
        ];
    }
}
