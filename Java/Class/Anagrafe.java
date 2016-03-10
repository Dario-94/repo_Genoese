public class Anagrafe{
	AnagrafeCoppia [] coppia;

	public Anagrafe (
		AnagrafeCoppia [] ac
		){
		this.coppia = ac;
	}

	public void stampaNomeCanePadrone(int i){
		for (int i = 0; i < coppie.length ; i++) {
			System.out.println(coppie.getPadroni() + " - " + coppie.getPadName());
			System.out.println(coppie.getDog() + " - " + coppie.getDogName());
		}
	}

	public static void main(String[] args) {
		AnagrafeCani cane1 = new AnagrafeCani ("Pluto", 5, "Maschio");
		AnagrafeCani cane2 = new AnagrafeCani ("Pippo", 3, "Maschio");
		AnagrafeCani cane3 = new AnagrafeCani ("Rocky", 4, "Maschio");

		AnagrafePadroni padrone1 = new AnagrafePadroni ("Dario", "Rossi", "DFJIOADJFO");
		AnagrafePadroni padrone2 = new AnagrafePadroni ("Mario", "Verdi", "DNVAJKDNJS");
		AnagrafePadroni padrone3 = new AnagrafePadroni ("Lucio", "Giallo", "TUEGHDUJJA");

		AnagrafeCoppia coppia1 = new AnagrafeCoppia (cane1, padrone1);
		AnagrafeCoppia coppia2 = new AnagrafeCoppia (cane2, padrone2);
		AnagrafeCoppia coppia3 = new AnagrafeCoppia (cane3, padrone3);
		AnagrafeCoppia[] coppie = {coppia1, coppia2, coppia3};
		
		AnagrafeCanina anagrafe = new AnagrafeCanina(coppie);
	}
}