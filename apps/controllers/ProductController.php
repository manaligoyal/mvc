<?php 
class ProductController extends Controller{
    
    public function index()
    {
        $allproducts = [
            ['id' => 1, 'name' => 'mobile', 'description' => 'acha h'],
            ['id' => 2, 'name' => 'mouse', 'description' => 'acha h'],
            ['id' => 3, 'name' => 'laptop', 'description' => 'acha h'],
            ['id' => 4, 'name' => 'keyboard', 'description' => 'acha h'],
        ];
        // echo "This is index of Product controller";
        $this->load->view('product.index',['data'=>$allproducts]);
      // $this->load->view('product.index',compact('allproducts'));
    }
    
    public function create()
    {
        // echo "This is create of Product controller";
        $this->load->view('product.create',[]);
    }
    public function store()
    {
        echo "This is store of Product controller";
    }
    public function edit($id)
    {
        echo "This is edit of Product controller $id";
    }
    public function update()
    {
        echo "This is update of Product controller";
    }
    public function show()
    {
        echo "This is show of Product controller";
    }
    public function destroy()
    {
        echo "This is destroy of Product controller";
    }
}