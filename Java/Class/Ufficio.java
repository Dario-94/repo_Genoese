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
}