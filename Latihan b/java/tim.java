// deklarasi kelas tim
public class tim{
    //dekalrasi variabel lokal
    private String namatim;
    private String asal;
    private int tahun;
    private String pemain;

    // konstruktor
    public tim(){

    }

    //set semua variabel
    public tim(String namatim, String asal, int tahun, String pemain){
        this.namatim = namatim;
        this.asal = asal;
        this.tahun = tahun;
        this.pemain = pemain;
    }

    //get dan set setiap variabel
    public String getnamatim(){
        return namatim;
    }
    public void setnamatim(String namatim){
        this.namatim = namatim;
    }

    public String getasal(){
        return asal;
    }
    public void setasal(String asal){
        this.asal = asal;
    }

    public int gettahun(){
        return tahun;
    }
    public void settahun(int tahun){
        this.tahun = tahun;
    }

    public String getpemain(){
        return pemain;
    }
    public void setpemain(String pemain){
        this.pemain = pemain;
    }

}