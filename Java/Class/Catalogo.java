public class Catalogo {
	String nome;
	Cd [] cat;

	public Catalogo(
		String name,
		Cd [] c){
		this.nome = name;
		cat = c;
	}

	public String getNomeCatalogo(){
		return name;
	}

	public String setNomeCatalogo(String nome){
		this.nome = nome;
	}

	public String getTitleCd(int i){
    	return cat[i].getTitle();
    }

    public String getAuthorCd(int i){
    	return cat[i].getAuthor();
    }

    public int getYearCd(int i){
    	return cat[i].getYear();
    }

	public void stampaCd(){
		for (int i = 0; i < cat.length; i++) {
			System.out.println(getTitleCd(i) + " - " + getAuthorCd(i) + " - " + getYearCd(i));
		}
	}

	public int ricercaNumCd(String nome){
        for (int i = 0; i < cat.length; i++){
            if (nome.equals(cat[i].getAuthor()));
            return i;
        }
    }

    public int ricercaNumCdByYear(int anno){
        for (int i = 0; i < cat.length; i++){
            if (anno.equals(cat[i].getYear()));
            return i;
        }
    }

    public String ricercaCdByTitle(String titolo){
        for (int i = 0; i < cat.length; i++){
            if (titolo.equals(cat[i].getTitle()));
            return ;
        }
    }
}