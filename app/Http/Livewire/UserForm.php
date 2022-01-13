<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use App\Models\Department;
use App\Models\Role;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $name , $phone , $password , $email , $image, $role , $user_id, $imageupdated , $description , $sms;
    public $updateMode = false;


    protected $rules = [
        'name' => 'required|max:20',
        'phone' => 'required|max:20',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'role' => 'required',

    ];
    protected $messages = [
        'name.required' => 'وارد کردن این بخش الزامی میباشد' ,
        'phone.required' => 'وارد کردن این بخش الزامی میباشد' ,
        'email.required' => 'وارد کردن این بخش الزامی میباشد' ,
        'password.required' => 'وارد کردن این بخش الزامی میباشد' ,
        'password.min' => 'حداقل تعداد کاراکتر 8 عدد میباشد' ,
        'role.required' => 'وارد کردن این بخش الزامی میباشد' ,
    ];



    protected function updated($input) {

        $this->validateOnly($input);

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
       User::find($id)->delete();
       $this->resetInputFields();
       $this->alert('warning', 'کاربر مورد نظر حذف شد', [
        'position' => 'center'
    ]);

   }

    public function sendsms($data){

        $response = Http::get("http://ippanel.com:8080/", [
            'apikey' => 'VuZU5kopVwrLsxgpoF5gKPt5l2049mtevxhCiZ4U5NE=',
            'pid' => 'p4dm0yz5pq',
            'fnum' => '+983000505',
            'tnum' => $data['phone'],
            'p1' => 'name',
            'p2' => 'username',
            'p3' => 'password',
            'v1' => $data['name'],
            'v2' => $data['username'],
            'v3' => $data['password'],
        ]);


    }


     public function store() {
        $this->validate();
        $user = new User();
        $user->image = $this->image;
        $user->name = $this->name;
        $user->role()->associate($this->role);
        $user->phone = $this->phone;
        $user->description = $this->description;
        $user->password = bcrypt($this->password);
        $password_unmd5 = $this->password;
        $user->email = $this->email;
        $user->save();
        $this->alert('success', 'ثبت نام با موفقیت انجام شد .', [
            'position' => 'center'
        ]);
        $this->resetInputFields();
        $data = [
            'name'  => $user->name,
            'phone'  => $user->phone,
            'username'   => $user->email,
            'password' => $password_unmd5
        ];
        if($this->sms)
        {
            $this->sendsms($data);
        }

     }


        public function edit($id)
        {
            $this->updateMode = true;
            $this->resetValidation();
            $user = User::where('id',$id)->first();
            $this->user_id = $id;
            $this->user = $user;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->description = $user->description;
            $this->phone = $user->phone;
            $this->role = $user->role->id;
            $this->image = $user->image;


        }


    private function resetInputFields(){
        $this->name = '';
        $this->phone = '';
        $this->password = '';
        $this->role = '';
        $this->email = '';
        $this->sms = '';
        $this->image = '';
        $this->description = '';


    }

    public function status($id)
    {


        $user = User::find($id);

        if($user->status == 1){
            $user->status = '0';
        }
            elseif ($user->status == 0)
            {
            $user->status = '1';
            }

        $user->save();
       }


      public function render()
       {

        return view('livewire.users.user-form' , [
            'users' => User::orderBy('id', 'ASC')->paginate(2),
            'roles' => Role::all(),
        ]);
      }

        public function update()
        {

                $user = User::find($this->user_id);
                if($this->imageupdated)
                {
                    $image = $this->imageupdated;
                }
                else
                {
                    $image= $this->image;
                }
                $user->role()->associate($this->role);

                if($this->password)
                {
                    $user->update([
                        'name' => $this->name,
                        'phone' => $this->phone,
                        'password' => bcrypt($this->password),
                        'email' => $this->email,
                        'image' => $image,
                        'description' => $this->description,
                    ]);
                }
                else
                {
                    $user->update([
                        'name' => $this->name,
                        'phone' => $this->phone,
                        'email' => $this->email,
                        'image' => $image,
                        'description' => $this->description,
                    ]);
                }

                $this->updateMode = false;
                $this->alert('success', 'تغییرات با موفقیت ثبت شد', [
                    'position' => 'center'
                ]);
                $this->resetInputFields();


        }

}
