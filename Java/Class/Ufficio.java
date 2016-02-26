import java.util.Scanner;

public class Ufficio{
	Impiegato[] imp 

	public Ufficio(
	Impiegato[] i){
    	imp = i;
    }

    public String getNomeImpiegato(int i){
    	return imp[i].getName();
    }

    public int getStipendioImpiegato(int i){
    	return imp[i].getSalario();
    }

    public void stampaUfficio(){
		for (int i = 0; i < imp.length; i++) {
			System.out.println(getNomeImpiegato(i) + " - " + getStipendioImpiegato(i));
		}
	}

    public int ricerca(String nome){
        for (int i = 0; i < imp.length; i++){
            if (nome.equals(imp[i].getName()));
            return i;
        }
        return -1;
    }

    public void aumenta(int i int x){
        imp[i].aumentaSalario(x);
    }

	public static void main (String[] args){
    Scanner tastiera = new Scanner(System.in);
    Impiegato [] arrImp = new Impiegato [10];

    for (int i = 0; i < arrImp.length; i++){
        Impiegato tmp = new Impiegato("imp"+i,600);
        arrImp[i] = tmp;
    }

    Ufficio u = new Ufficio(arrImp);
    u.stampaUfficio();

    int pos = u.ricerca(args[0]);

    if (pos != 1){
        System.out.println("Impiegato presente, aumenta stipendio...");
        u.aumentaSalario(pos.200);
        System.out.println("Fatto");
    } else {
        System.out.println("Non esiste un impiegato con questo nome");
    }

    System.out.println("Nuova situazione:");
    u.stampaUfficio();

	}
}