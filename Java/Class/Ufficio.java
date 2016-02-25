import java.util.Scanner;

public class Ufficio{
	Impiegato[] impiegati 

	public Ufficio(
	Impiegato[] impiegati){
    	this.impiegati = impiegati;
    }

    public String getNomeImpiegato(int i){
    	return impiegati[i].getName();
    }

    public int getStipendioImpiegato(int i){
    	return impiegati[i].getSalario();
    }

    public void stampaUfficio(){
		for (int i = 0; i < impiegati.length; i++) {
			
		}
	}

	public static void main (String[] args){
    Scanner tastiera = new Scanner(System.in);

	}
}