//library
#include <iostream>
#include <string>
using namespace std;

//kelas tim
class tim{
    //variabel private
    private:
        string namatim;
        string asal;
        int tahun;
        string pemain;
    //variabel public
    public:
        // constructor kelas
        tim(){
            this->namatim = this->asal = this-> pemain = "";
            this->tahun = 0;
        }
        tim(string namatim, string asal, int tahun, string pemain){
            this->namatim = namatim;
            this->asal = asal;
            this-> pemain = pemain;
            this->tahun = tahun;
        }

        //set dan get setiap variabel
        void settim(string namatim, string asal, int tahun, string pemain){
            this->namatim = namatim;
            this->asal = asal;
            this-> pemain = pemain;
            this->tahun = tahun;
        }
        void setnamatim(string namatim){
            this->namatim = namatim;
        }
        string getnamatim(){
            return this->namatim;
        }
        void setasal(string asal){
            this->asal = asal;
        }
        string getasal(){
            return this->asal;
        }
        void settahun(int tahun){
            this->tahun = tahun;
        }
        int gettahun(){
            return this->tahun;
        }
        void setpemain(string pemain){
            this->pemain = pemain;
        }
        string getpemain(){
            return this->pemain;
        }

};