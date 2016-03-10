public class AnagrafePadroni{
	private String nomePadrone;
	private String cognomePadrone;
	private String codiceFiscale;

	public AnagrafePadroni(
		String nP,
		String cP,
		String cF
		){
		this.nomePadrone = nP;
		this.cognomePadrone = cP;
		this.codiceFiscale = cF;
	}

	public String getPadName(){
    	return nomePadrone;
    }

    public void setPadName(String name) {
        this.nomePadrone = name;
    }

    public String getPadSurname(){
    	return cognomePadrone;
    }

    public void setPadSurname(String surname) {
        this.cognomePadrone = surname;
    }

    public String getCodFisc(){
    	return codiceFiscale;
    }

     public void setCodFisc(String codfisc) {
        this.codiceFiscale = codfisc;
    }
}