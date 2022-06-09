<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 06.06.2019
     * Time: 16:22
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\User as Model;
    use App\Models\Admin\User;
    use App\Repositories\CoreRepository;

    class UserRepository extends CoreRepository
    {



        public function __construct()
        {
            parent::__construct();

        }


        /**
         * @return mixed
         */
        protected function getModelClass()
        {
            return Model::class;
        }


        /** All Users */
        public function getAllUsers($perpage)
        {
            $users = $this->startConditions()
                    ->toBase()
                    ->paginate($perpage);
            return $users;
        }

        /** One Order by User */
        public function getUserTickets($user_id, $perpage)
        {
            $tickets = $this->startConditions()::withTrashed();

            return $tickets;
        }

        /** User Role */
        public function getUserRole($id)
        {
            $role = $this->startConditions()
                ->find($id)
                ->roles()
                ->get();

            foreach ($role as $r){
                $role = $r->name;
            }

            return $role;
        }

        /** Count Orders*/
        public function getCountTickets($id,$perpage)
        {
            return $count;
        }

        /** CountOrders for Pagination part */
        public function getCountTicketsPag($id)
        {
            return $count;
        }


    }