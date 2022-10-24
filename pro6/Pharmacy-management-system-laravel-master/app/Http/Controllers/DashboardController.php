<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sales;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Notifications\StockAlert;
use App\Events\ProductReachedLowStock;

class DashboardController extends Controller
{
    public function index(){
        $title = "dashboard";
        $total_categories = Category::count();
        $low_in_stock = Purchase::orderBy('quantity', 'Asc')->first()->name;
        $low_in_stock_quantity= Purchase::orderBy('quantity', 'Asc')->first()->quantity;
        $total_expired_products = Purchase::whereDate('expiry_date', '<=', Carbon::now())->count();
        $latest_sales = Sales::whereDate('created_at','=',Carbon::today())->get();
        $today_sales = Sales::whereDate('created_at','=',Carbon::today())->sum('total_price');
        return view('dashboard',compact(
            'title','total_expired_products',
            'latest_sales','today_sales','total_categories',
            'low_in_stock',
            'low_in_stock_quantity'
        ));
    }
}
