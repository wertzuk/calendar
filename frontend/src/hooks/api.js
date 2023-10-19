import { ref } from 'vue';
const API_URL = 'localhost:8000/api';

export async function useTournaments() {
  const data = ref(null);
  const error = ref(null);

  fetch(`${API_URL}/tournaments`)
    .then((res) => res.json())
    .then((json) => (data.value = json))
    .catch((err) => (error.value = err));
}
