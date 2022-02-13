#include "tim.cpp" //include kelas tim
using namespace std;

int main(){

    int n=2, i; //deklarasi variabel

    //deklarasi array kelas
    tim mtim[n];

    //set tim pertama
    mtim[0].setnamatim("Tim Waifu1");
    mtim[0].setasal("Anime1");
    mtim[0].settahun(2002);
    mtim[0].setpemain("Ruminas, Destiny, Sasha, Lynn, Siesta");

    //set tim kedua
    mtim[1].settim("Tim Waifu2", "Anime2", 2002, "Hu Tao, Ganyu, Yae, Miko, Ueno, Marin");

    //tampilkan kedua tim
    cout << mtim[0].getnamatim() << endl;
    cout << mtim[0].getasal() << endl;
    cout << mtim[0].gettahun() << endl;
    cout << mtim[0].getpemain() << endl;
    cout << endl;
    cout << mtim[1].getnamatim() << endl;
    cout << mtim[1].getasal() << endl;
    cout << mtim[1].gettahun() << endl;
    cout << mtim[1].getpemain() << endl;

    //selesai
    return 0;
    
}