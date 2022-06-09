<?php


    namespace App\Repositories\Admin;

    use App\Models\Admin\User as Model;
    use App\Models\Admin\User;
    use App\Repositories\CoreRepository;

    class TicketRepository extends CoreRepository
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
        public function getAllTickets($perpage)
        {
            $tickets = $this->startConditions()
                    ->toBase()
                    ->paginate($perpage);
            return $tickets;
        }

        /** One Order by User */


        /** Count Orders*/
        public function getCountTickets($id,$perpage)
        {

            $count = $this->startConditions()
            ->count();

            return $count;
        }

        /** CountOrders for Pagination part */


    }

    // <!-- <div class="text-center">
    // <p>{{count($getCountTickets)}} продуктов из {{$count}} </p>

    // @if ($getAllTickets->total() > $getAllTickets->count())
    //     <br>
    //     <div class="row justify-content-center">
    //         <div class="col-md-12">
    //             <div class="card">
    //                 <div class="card-body">
    //                     {{$getAllTickets->links()}}
    //                 </div>
    //             </div>
    //         </div>
    //     </div>
    // @endif
    // </div> -->