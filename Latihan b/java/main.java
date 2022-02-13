import java.util.*; //import library java

// kelas main
public class main {
    public static void main(String[] args){

        //deklarasi variabel lokal
        int n=2;
        int i;

        //dekalrasi array untuk tim
        tim timsb[] = new tim[n];
        //perulangan untuk setiap indeks
        for(i=0; i<n; i++){
            timsb[i] = new tim();
        } 

        //isi masukkan setiap indeks
        timsb[0].setnamatim("Tim Waifu1");
        timsb[0].setasal("Anime1");
        timsb[0].settahun(2002);
        timsb[0].setpemain("Ruminas, Destiny, Sasha, Lynn, Siesta");
        timsb[1].setnamatim("Tim Waifu2");
        timsb[1].setasal("Anime2");
        timsb[1].settahun(2002);
        timsb[1].setpemain("Hu Tao, Ganyu, Yae, Miko, Ueno, Marin");

        //tampilkan
        for(i=0; i<n; i++){
            System.out.println("Tim Sepak Bola-" + (i+1) + " :");
            System.out.println("Nama : " + timsb[i].getnamatim());
            System.out.println("Asal : " + timsb[i].getasal());
            System.out.println("Tahun : " + timsb[i].gettahun());
            System.out.println("Pemain : " + timsb[i].getpemain());
            System.out.println("");
        }
    }
}