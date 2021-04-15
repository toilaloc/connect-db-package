1. Tính đóng gói
Tính đóng gói được thể hiện qua 3 phạm vi truy cập: public, protected, private
- public được sử dụng ở mọi phạm vi
- protected được sử dụng ở chính lớp đó và lớp kế thừa
- private chỉ được sử dụng ở chính lớp đó. (Nếu muốn sử dụng phải thông qua hàm set, get)

VD:

class DongVat {

	public $noHomeCat;
	protected $myCat;
	private $neighborCat;

    public function __construct(){
        $this->noHomeCat = "Meo lang thang";
        $this->myCat = "Meo tam the";
    }
    public function setNeighborCat($neighborCat) {
        $this->neighborCat = $neighborCat;

    }
	public function getNeighborCat() {
		return  $this->neighborCat;
	}

	public function getNoHomeCat(){
        echo $this->noHomeCat;
    }


}

class DongVatKhac extends DongVat {
    public function getMyCat(){
        echo $this->myCat;
    }
}

    $dongVat = new DongVat();
    // public
    echo $dongVat->getNoHomeCat()."<br>";

    // protected
    $dongVatKhac = new DongVatKhac();
    echo $dongVatKhac->getMyCat()."<br>";

    // private
    $dongVat->setNeighborCat('Meo Muop');
    echo "Catching success ".$dongVat->getNeighborCat();

2. Tính kế thừa
Một lớp con kế thừa lại một lớp cha sẽ sử dụng lại toàn bộ phương thức và thuộc tính (không phải phạm vi truy cập private) của lớp cha.

class Parent {
    public function doSomething(){
        echo "Don't wanna do anything, right?";
    }
}
class Child extends Parent {
}

$child = new Child();

// Ke thua tu lop cha
echo $child->doSomething();

3. Tính trừu tượng
Tính trừu tượng bỏ qua hay không chú ý đến một số khía cạnh của thông tin mà nó đang trực tiếp làm việc lên, nghĩa là nó có khả năng tập trung vào những cốt lõi cần thiết.
- Lớp trừu tượng phải là protected hoặc public và không đươc dịnh nghĩa.
absract class ConMeo {
    public function tiengKeu();
    public function soChan();
}
4. Tính đa hình
Tính đa hinh được thể hiện khi nhiều lớp con cùng kế thừa một lớp cha và cùng nhau định nghĩa một phương thức ở lớp cha, nhưng mỗi lớp con lại cho ra các kết quả khác nhau.

class Hinh {
	
	public function chuVi($chieuDai, $chieuRong){
		return $chieuDai * $chieuRong;
	}
}

class HinhVuong extends Hinh {

	public function chuVi($chieuDai, $chieuRong){
		return $chieuDai * $chieuRong;
	}
	
}
class HinhChuNhat extends Hinh {

	public function chuVi($chieuDai, $chieuRong){
		return $chieuDai * $chieuRong;
	}
	
}
